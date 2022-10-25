 
import postcss from 'gulp-postcss';
// import sourcemaps from 'gulp-sourcemaps';
// import sourcemap from 'source-map';
import autoprefixer from 'autoprefixer';
import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
//import gulpSass from 'gulp-sass';
//import dartSass from 'sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from "browser-sync";
import zip from "gulp-zip";
import info from "./package.json";
import replace from "gulp-replace";
import wpPot from "gulp-wp-pot";
// import purgecssWordpress from 'purgecss-with-wordpress'; 
import concat from 'gulp-concat'; 

 
const gulp = require('gulp');
const purgecss = require('gulp-purgecss');
const sourcemaps = require('gulp-sourcemaps');


// const sass = gulpSass(nodeSass); Using const with require because gulp sass gives syntax error cannot use import statement outside a module.
const sass = require( 'gulp-sass' )(require( 'sass' ) ); 
//
// IMPORTANT install popper as npm install @popperjs/core --save not popper.js
// 
// is either defined as prod or undefined and not prod
const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {    
    src: ['src/scss/bundle.scss', 'src/scss/admin.scss', 'src/scss/block-editor.scss' ],
    dest: 'dist/css'
  },
  scripts: {
  //  src: ['src/js/bundle.js', 'src/js/bootstrap/bootstrap.bundle.js', 'src/js/skip-link-focus-fix.js', './node_modules/isotope-layout/js/isotope.js'],
  // src: [ './node_modules/isotope-layout/js/isotope.js', 'src/js/skip-link-focus-fix.js', 'src/js/bundle.js'],
    //src:  ['src/js/bundle.js','src/js/my-action-script.js'],
    src: 'src/js/bundle.js',
    dest: 'dist/js'
  },
  images: {
    src: 'src/img/**/*.{jpg,jpeg,png,svg,gif}',
    dest: 'dist/img'
  },
  webfonts: {
    src: ['./node_modules/@fortawesome/fontawesome-free/webfonts/*', './node_modules/bootstrap-icons/font/fonts/*'],
    dest: 'dist/webfonts'
  },
  // other: {
  //   src: ['src/**/*', '!src/{img, js, scss}', '!src/{img, js, scss}/**/*'],
  //   dest: 'dist'
  // },
}
process.traceDeprecation = true;
// Configuration file for fontawesome


const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://localhost/karenchorseman/" // put your local website link here
  });
  done();
};
export const reload = done => {
  server.reload();
  done();
};
// export const clean = () => {
// return del(['dist']);
// } // returns a promise so can use the shortcut
export const clean = () => del(['dist']);

// initialize sourcemaps plugin
// pipe plugins to map
// create source map file before writing to destination
// note: all plugins must be compatible with sourcemaps to work
export const styles = () => {
  return src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie10'}))) 
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))   
    .pipe(dest(paths.styles.dest))     
    .pipe(server.stream());
}
export const images = () => {
  return src(paths.images.src)
   // .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest(paths.images.dest));
}

export const copy = () => {
  return src( paths.webfonts.src )
    .pipe(dest( paths.webfonts.dest ) );
}

// export const webfonts = () => {
//   return src(paths.webfonts.src)  
//   .pipe(dest(paths.webfonts.dest));
// }
 
// webpack will minify if production only; use sourcemap in development
export const scripts = () => {
  return src(paths.scripts.src)
  .pipe(named())
  .pipe(webpack({
    module: {
      rules: [
        {
          test: /\.js$/,           
          exclude: {
            and: [/node_modules/],
          },
          // include: /node_modules\/bootstrap/,
          use: {
              loader: 'babel-loader',
              options: {
                presets: [
                  [ 
                    '@babel/preset-env',
                    {
                      modules: false
                    }
                  ]
                ]
              }
            }         
        }          
      ]
    },
    
    output: {
      filename: '[name].js'
    },
    externals: {
      jquery: 'jQuery'
    },
    mode: PRODUCTION ? 'production' : 'development'
  }))
  //.pipe(dest('dist/js'))
  .pipe( concat( 'bundle.js' ) )
  .pipe( dest(paths.scripts.dest ) )
}
/*"css-purge": "purgecss --css assets/css/starter.css --content index.html --output assets/css/",*/ 
// export const purge = () => {
//   return gulp.src('dist/css/bundle.css')
//   .pipe(PurgeCSS({    
//       content: ['**/*.php'],
//       css: ['**/*.css'],
//       safelist:  [
//         purgecssWordpress.safelist,
//         'red',
//         'blue',
//         /^red/,
//         /blue$/,
//       ]
//       }))
//     .pipe(gulp.dest('build/css'))
// };
 
 
export const purgecssGulp = () => {
  return gulp.src('dist/css/bundle.css')
  .pipe(purgecss({  
      content: ['**/*.php'],
      css: ['**/*.css'],
      // safelist:  [
      //   purgecssWordpress.safelist,
      //   'red',
      //   'blue',
      //   /^red/,
      //   /blue$/,
      // ]
      }))
    .pipe(gulp.dest('bundled/dist/css'))
};
export const compress = () => {
  return src([
    "**/*",
    "!node_modules{,/**}",
    "!bundled{,/**}",
    "!src{,/**}",
    "!gulpfile.babel.js",
    "!.**",
    "!**.json",
    "!**.lock",
    "!**.psd",
    "!documents{,/**}",
    "!vendor{,/**}",
    "!webpack.config.js",
  ])
  .pipe(dest('bundled'));
};
export const zipped = () => {
  return src("bundled/**/*")
    .pipe(gulpif(
      file => file.relative.split(".").pop() !== "zip",
      replace("_workroom1128", 'info.name')
    ))
    .pipe(zip(`${info.name}.zip`))
    .pipe(dest('bundled'));
};


export const pot = () => {
  return src("**/*.php")
  .pipe(
      wpPot({
        domain: "workroom1128",
        package: info.name
      })
    )
  .pipe(dest(`languages/${info.name}.pot`));
};

export const watchForChanges = () => {
  //watch('src/scss/**/*.scss', styles);
  watch('src/scss/**/*.scss', series(styles, reload));
  watch('src/img/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  //watch(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'], series(copy, reload));
  watch('src/js/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
} 



// import the functions from gulp to delete dist folder and copy images and styles and watch for changes
// series runs in order and parallel runs at once 

export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges);
//export const dev = series(clean, parallel(styles, scripts), serve, watchForChanges);
//export const build = series(clean, parallel(styles, images, copy, scripts), pot, compress);

export const build = series(clean, parallel(styles, images, copy, scripts), compress, purgecssGulp, zipped);

export default dev;

// npm run build  -   runs gulp build --prod 
