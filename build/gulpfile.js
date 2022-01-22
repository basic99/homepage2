var gulp = require('gulp'),
    rename = require('gulp-rename'),
    markdown = require('gulp-markdown')


gulp.task('markdown_homepage', function() {
    return gulp.src('../blog/markdown/*.md')
        .pipe(rename({
            extname: ".html"

        }))
        .pipe(markdown())
        .pipe(gulp.dest('../blog/'))

});

exports.default = gulp.series(
    'markdown_homepage'

);