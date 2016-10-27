var gulp = require('gulp');
var jshint = require('gulp-jshint');
var rename = require('gulp-rename');
var include = require('gulp-include');
var uglify = require('gulp-uglify');
autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');
var gulpif = require('gulp-if');
var del = require('del');
var glob = require('glob');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var spritesmith = require('gulp.spritesmith');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');

var isDevMode = false;

var base = {
    src: 'www/f/src/**/',
    min: 'www/f/min/',
    media: 'www/f/media/'
  };
var paths = {
    js_src: base.src + '*.js',
    sass_src: base.src + '*.scss',
    js_min: base.min + '*.js',
    css_min: base.min + '*.css',
    sprites: base.media + '*-sprite.png'
  };

var spriteTasks = [];


gulp.task('clean-css', function() {
  del(paths.css_min);
});

gulp.task('css', ['clean-css'], function () {
  return gulp.src(base.src + 'main.scss')
    .pipe(plumber())
    .pipe(gulpif(isDevMode, sourcemaps.init()))
    .pipe(sass({
      includePaths: bourbon.includePaths,
      outputStyle: 'compressed'
    }))
    .pipe(gulpif(isDevMode, sourcemaps.write()))
    .pipe(rename(function (path) {
      var dirname = path.dirname.split('/').reverse();
      path.dirname = '.';
      path.basename = dirname[0]
    }))
    .pipe(gulp.dest(base.min));
});

gulp.task('css-dev', function () {
  isDevMode = true;
  gulp.start('css');
});

var bulkSass = require('gulp-sass-bulk-import');
 
gulp.task('css', function() {
    return gulp
            .src(base.src + 'main.scss')
            .pipe(bulkSass())
            .pipe(sass({
              includePaths: bourbon.includePaths,
              outputStyle: 'compressed'
            }))
             .pipe(rename(function (path) {
      var dirname = path.dirname.split('/').reverse();
      path.dirname = '.';
      path.basename = dirname[0]
    }))
               // Initialise sourcemaps prior to compiling SASS.
        .pipe(sourcemaps.init())

        // Compile SASS.
        .pipe(sass({outputStyle: 'compressed'}))

        // Rename index.scss file to styles.css.
        .pipe(rename({basename: 'styles'}))

        // Write sourcemap inline.
        .pipe(sourcemaps.write())

        // Reinitialise sourcemaps, loading inline sourcemap.
        .pipe(sourcemaps.init({loadMaps: true}))

        // Run compiled CSS through autoprefixer.
        .pipe(autoprefixer({browsers: ['last 2 versions']}))

        // Write sourcemap to a separate file.
        .pipe(sourcemaps.write('./'))

        // Write CSS file to desitination path.
        .pipe(gulp.dest('www/f/'))

             .pipe(gulp.dest(base.min));

});

gulp.task('clean-js', function() {
  del([paths.js_min, '!' + base.min + 'libs.min.js']);
});

gulp.task('js-lint', function () {
  gulp.src(paths.js_src)
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});


gulp.task('js', ['clean-js'], function () {
  return gulp.src(base.src + 'main.js')
    .pipe(plumber())
    .pipe(gulpif(isDevMode, sourcemaps.init()))
    .pipe(include())
    .pipe(uglify())
    .pipe(gulpif(isDevMode, sourcemaps.write()))
    .pipe(rename(function (path) {
      var dirname = path.dirname.split('/').reverse();
      path.dirname = '.';
      path.basename = dirname[0]
      path.extname = '.min.js'
    }))
    .pipe(gulp.dest(base.min));
});

gulp.task('js-dev', ['js-lint'], function () {
  isDevMode = true;
  gulp.start(['js']);
});


gulp.task('clean-sprite', function() {
  del(paths.sprites);
  del('www/f/src/_*-sprite.scss');
});

var spritePaths = glob.sync(base.media + 'sprites/*/');
spritePaths.forEach(function (path, index) {
  /*
   * paths like 'www/f/media/sprites/dir/'
   * minify file name - dir
   */
  var fileName = (path.split('/'))[4];
  var deps = (index === 0) ? ['clean-sprite'] : [];
  gulp.task(fileName + '-sprite', deps, function () {
    return gulp.src(path + '*.png')
      .pipe(plumber())
      .pipe(spritesmith({
        imgName: base.media + fileName + '-sprite.png',
        cssName: 'www/f/src/_' + fileName + '-sprite.scss',
        padding: 2,
        imgPath: '/f/media/' + fileName + '-sprite.png'
      }))
      .pipe(gulp.dest('.'));
  });
  spriteTasks.push(fileName + '-sprite');
});

gulp.task('sprite', spriteTasks);


gulp.task('sprite-css', spriteTasks, function () {
  gulp.start('css');
});

gulp.task('sprite-css-dev', spriteTasks, function() {
  isDevMode = true;
  gulp.start('css');
});


gulp.task('js-libs', function() {
  return browserify('www/f/src/libs.js')
    .bundle()
    .pipe(source('libs.min.js'))
    .pipe(buffer())
    .pipe(uglify())
    .pipe(gulp.dest(base.min));
});


  /*gulp.task('styles', function() {
      return gulp.src('www/f/index.scss')

          // Initialise sourcemaps prior to compiling SASS.
          .pipe(sourcemaps.init())

          // Compile SASS.
          .pipe(sass({outputStyle: 'compressed'}))

          // Rename index.scss file to styles.css.
          .pipe(rename({basename: 'styles'}))

          // Write sourcemap inline.
          .pipe(sourcemaps.write())

          // Reinitialise sourcemaps, loading inline sourcemap.
          .pipe(sourcemaps.init({loadMaps: true}))

          // Run compiled CSS through autoprefixer.
          .pipe(autoprefixer({browsers: ['last 2 versions']}))

          // Write sourcemap to a separate file.
          .pipe(sourcemaps.write('./'))

          // Write CSS file to desitination path.
          .pipe(gulp.dest('www/f/'));
  });*/

gulp.task('build', function () {
  isDevMode = false;
  gulp.start(['sprite-css', 'js-libs', 'js']);
});


gulp.task('default', ['sprite-css-dev', 'js-dev'], function () {
  gulp.watch(base.media + 'sprites/*/*.png', ['sprite-css-dev']);
  gulp.watch(paths.sass_src, ['css-dev']);
  gulp.watch(paths.js_src, ['js-dev']);
});
