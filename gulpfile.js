var gulp = require('gulp'); 
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var watch = require('gulp-watch');



gulp.task('sass', function () { 
return gulp.src('assets/sass/app.scss') 
.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) 
.pipe(cleanCSS())
.pipe(gulp.dest('dist/css/')); });


//task para o watch
//coloca aqui suas tasks e depois só rodar o watch :D

gulp.task('watch', function() {
    gulp.watch('assets/sass/*.scss', gulp.series('sass'));
  });