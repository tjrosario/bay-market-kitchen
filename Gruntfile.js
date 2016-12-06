module.exports = function(grunt) {
  var configs, options;
  require("time-grunt")(grunt);
  grunt.loadTasks("tasks");
  options = {
    configPath: require("path").join(process.cwd(), "tasks"),
    init: true,
    data: {
      pkg: grunt.file.readJSON("package.json"),
      theme: 'wp-content/themes/baymarketkitchen'
    }
  };
  configs = require("load-grunt-config")(grunt, options);
};
