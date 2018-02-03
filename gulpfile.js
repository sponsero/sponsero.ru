'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('scss', function () {
  return gulp.src('./scss/**/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['> 1%']
    }))
    .pipe(gulp.dest('./css'));
});

gulp.task('default', ['scss'], function () {
  gulp.watch('./scss/**/*.scss', ['scss']);
});