var gulp = require('gulp'),
    rename = require('gulp-rename'),
    markdown = require('gulp-markdown'),


gulp.task('markdown_homepage', function() {
    return gulp.src('../docs/docker/docker.md')
        .pipe(rename({
            extname: ".html"

        }))
        .pipe(markdown())
        .pipe(gulp.dest('../pages/'))

});

gulp.task('default', ['markdown_homepage']);

