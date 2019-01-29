const path = require('path');

module.exports = {
  html        : false,
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  clean: {
    patterns: [
      path.resolve(process.env.PWD, 'css/'),
      path.resolve(process.env.PWD, 'images/')
    ]
  },

  javascripts: {
    entry: {
      // files paths are relative to
      // javascripts.dest in path-config.json
      app: ["./app.js"]
    }
  },

  browserSync: {
    server: {
      // should match `dest` in
      // path-config.json
      baseDir: 'public'
    }
  },

  production: {
    rev: false
  }
}
