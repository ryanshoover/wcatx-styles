'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./style.scss')
    .pipe(sass({
    	outputStyle: 'compressed'
    	}).on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./**/*.scss', ['sass']);
});

gulp.task( 'default', [ 'sass:watch' ] );
gulp.task( 'css', [ 'sass' ] );
