var gulp = require('gulp');
var sass = require('gulp-sass');
//var uglify = require('gulp-uglify');
//var gulpCopy = require('gulp-copy');
var sourcemaps = require('gulp-sourcemaps');
//var imagemin = require('gulp-imagemin');

// Logs Message
gulp.task('message', function(){
  return console.log('Gulp is running...');
});

// Copy All HTML files

// gulp.task('copyHtml', function(){
//   	gulp.src('app/*.html').pipe(gulp.dest('dest'));
// });

// gulp.task('copyFonts', function(){
//   	gulp.src('app/fonts/*').pipe(gulp.dest('dest/fonts'));
// });

// gulp.task('copyImages', function(){
//   	gulp.src('app/images/*').pipe(gulp.dest('dest/images'));
// });

// Compile Sass
gulp.task('sass', function(){
  	return gulp.src('assets/scss/main.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/css'))
});

// gulp.task('imageMin', function(){
//   	return gulp.src('assets/images/*.+(png|jpg|gif|svg)')
//   	.pipe(imagemin())
//   	.pipe(gulp.dest('assets/images'))
// });

gulp.task('default', ['message', 'sass']);

gulp.task('watch', function(){
	gulp.watch('assets/scss/main.scss', ['sass']);
	//gulp.watch('assets/images/*', ['imageMin']);
});