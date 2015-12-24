var gulp = require('gulp');
var connect = require('gulp-connect');
var postcss = require('gulp-postcss');

gulp.task('css', function () {
  return gulp.src('app/css/core.css')
      .pipe(postcss([
        require('autoprefixer'),
        // import MUST be before custom-properties for variables to work
        require('postcss-import'),
        require('postcss-calc'),
        require('postcss-custom-media'),
        require('postcss-custom-properties'),
        require('postcss-custom-selectors'),
        // color-function MUST be after custom-selectors
        // for it to work with variables
        require('postcss-color-function'),
        require('postcss-media-minmax'),
        require('postcss-nesting'),
        require('postcss-nested')
      ]))
      .pipe(gulp.dest('build/css'))
      .pipe(connect.reload());
});

gulp.task('connect', function () {
  connect.server({
    root: 'build',
    livereload: true
  });
});

gulp.task('default', ['css', 'connect'], function () {
  gulp.watch('app/css/**/*.css', ['css']);
});
