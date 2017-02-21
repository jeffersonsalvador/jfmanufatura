var js = [
];

var gulp = require("gulp");
var cssmin = require("gulp-cssmin");
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");

gulp.task("cssminify", function(){
	return gulp.src("css/**/*")
		.pipe(cssmin())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./css/'))
});

gulp.task("uglify", function(){
	return gulp.src("js/**/*.js")
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./js/'))
});