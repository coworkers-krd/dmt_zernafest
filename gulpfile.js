'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const runSequence = require('run-sequence');
const watch = require('gulp-watch');
const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');
const pug = require('gulp-pug');
const $gp = require("gulp-load-plugins")();
const del = require("del");
const htmlbeautify = require('gulp-html-beautify');


gulp.task('htmlbeautify', function() {
    var options = {
        indentSize: 2,
        unformatted: [
            // https://www.w3.org/TR/html5/dom.html#phrasing-content
             'abbr', 'area', 'b', 'bdi', 'bdo', 'br', 'cite',
            'code', 'data', 'datalist', 'del', 'dfn', 'em', 'embed', 'i', 'ins', 'kbd', 'keygen', 'map', 'mark', 'math', 'meter', 'noscript',
            'object', 'output', 'progress', 'q', 'ruby', 's', 'samp', 'small',
             'strong', 'sub', 'sup', 'template', 'time', 'u', 'var', 'wbr', 'text',
            'acronym', 'address', 'big', 'dt', 'ins', 'strike', 'tt'
        ]

    };
gulp.src('./build/*.html')
    .pipe(htmlbeautify(options))
    .pipe(gulp.dest('./build'))
});

gulp.task('pug', function() {
  return gulp.src("./src/pug/*.pug")
       .pipe(pug())
	.pipe($gp.plumber())
      .pipe(gulp.dest("./build/"))
	 .pipe(htmlbeautify());
     
});


gulp.task('sass', function(){
    return gulp.src(`./src/scss/*.scss`)
     .pipe(sass())
	.pipe($gp.plumber())
   .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
  
    .pipe(gulp.dest(`./build/css`));
  
});

gulp.task("scripts", () => {
  return gulp
    .src(`./src/js/*.js`)
    .pipe(gulp.dest(`./build/js/`));
    
});

gulp.task('imagemin', function() {
    gulp.src(`./src/img/**/*`)
        .pipe(imagemin())
        .pipe(gulp.dest(`./build/img`))
});

gulp.task("fonts", () => {
  return gulp
    .src(`./src/fonts/**`)
    .pipe(gulp.dest(`./build/fonts/`));
});

gulp.task("plugins", () => {
  return gulp
    .src(`./src/plugins/**`)
    .pipe(gulp.dest(`./build/plugins/`));
});

gulp.task("svg", done => {
  return gulp
    .src(`./src/img/icons/*.svg`)
    .pipe(
      $gp.svgmin({
        js2svg: {
          pretty: true
        }
      })
    )
    .pipe(
      $gp.cheerio({
        run($) {
          $("[fill], [stroke], [style], [width], [height]")
            .removeAttr("fill")
            .removeAttr("stroke")
            .removeAttr("style")
            .removeAttr("width")
            .removeAttr("height");
        },
        parserOptions: { xmlMode: true }
      })
    )
    .pipe($gp.replace("&gt;", ">"))
    .pipe(
      $gp.svgSprite({
        mode: {
          symbol: {
            sprite: "../sprite.svg"
          }
        }
      })
    )
    .pipe(gulp.dest(`./build/img/icons`));
});

gulp.task('clean', function(){
     return del(`./build/`);
});



gulp.task('watch', function(){
  gulp.watch([`src/scss/*/*.scss`, `src/scss/*.scss`], function() {
     gulp.start('sass'); 
     });
  gulp.watch([`src/pug/*/*.pug`, `src/pug/*.pug`], function() {
     gulp.start('pug'); 
    });
  gulp.watch( [`src/js/*/*.js`,`src/js/*.js`], function() {
     gulp.start('scripts'); 
  });

});


gulp.task('default', function(){
runSequence (
    
    'clean',
   'imagemin',
   'svg',
   'fonts',
	'pug',
	'sass',
	'plugins',
	'scripts',
   'watch'
    
)
});

