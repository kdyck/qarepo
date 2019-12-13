var themeDir = './';

module.exports = function(grunt) {
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	var gruntConfig = {
		pkg: grunt.file.readJSON('package.json'),
		nodemon: {
			all: {
				script: 'Gruntfile.js',
				options: {
					watchedExtentions: [ 'js' ]
				}
			}
		},
		less: {
			options: {
				relativeUrls: true,
				rootpath: 'src/styles/'
			},
			build: {
				files: {}
			},
			deploy: {
				options: {
					compress: true
				},
				files: {}
			}
		},
		concat: {
			app: {
				src: [
					themeDir + '/src/javascripts/functions.js',
					themeDir + '/src/javascripts/maps.js',
					themeDir + '/src/javascripts/about.js',
					themeDir + '/src/javascripts/pages/global.js',
					themeDir + '/src/javascripts/pages/about.js',
					themeDir + '/src/javascripts/pages/contact.js',
					themeDir + '/src/javascripts/pages/github.js'
				],
				dest: themeDir + '/app.js'
			},
			build: {
				src: [
					themeDir + '/src/javascripts/libs/jquery/jquery-*.js',
					'!' + themeDir + '/src/javascripts/libs/jquery/jquery-*.min.js',
					themeDir + '/src/javascripts/libs/jscookie/js.cookie.js',
					themeDir + '/src/javascripts/libs/inputmask/jquery.inputmask.js',
					themeDir + '/src/javascripts/libs/swiper/swiper.js'
				],
				dest: themeDir + '/vendor.js'
			},
			deploy: {
				src: [
					themeDir + '/src/javascripts/libs/jquery/jquery-*.min.js',
					themeDir + '/src/javascripts/libs/jscookie/js.cookie.js',
					themeDir + '/src/javascripts/libs/inputmask/jquery.inputmask.min.js',
					themeDir + '/src/javascripts/libs/swiper/swiper.min.js'
				],
				dest: themeDir + '/vendor.js'
			}
		},
		uglify: {
			deploy: {
				options: {
					mangle: false
				},
				files: {}
			}
		},
		svg_sprite: {
			options: {
				shape: {
					id: {
						separator: '-',
						generator: 'icon-%s'
					}
				},
				mode: {
					symbol: {
						dest: '.',
						sprite: 'icons.svg'
					}
				}
			},
			build: {
				cwd: themeDir + '/src/icons',
				src: [ '**/*.svg' ],
				dest: themeDir
			}
		},
		watch: {
			svg: {
				files: [ themeDir + '/src/icons/**/*.svg' ],
				tasks: [ 'svg_sprite:build' ]
			},
			javascript: {
				files: [ themeDir + '/src/javascripts/**/*.js' ],
				tasks: [ 'concat:build', 'concat:app' ]
			},
			less: {
				files: [ themeDir + '/src/styles/**/*.less' ],
				tasks: [ 'less:build' ]
			}
		}
	};

	gruntConfig['less']['build']['files'][themeDir + '/style.css'] = themeDir + '/src/styles/responsive.less';
	gruntConfig['less']['build']['files'][themeDir + '/editor.css'] = themeDir + '/src/styles/editor.less';

	gruntConfig['less']['deploy']['files'][themeDir + '/style.css'] = themeDir + '/src/styles/responsive.less';
	gruntConfig['less']['deploy']['files'][themeDir + '/editor.css'] = themeDir + '/src/styles/editor.less';

	gruntConfig['uglify']['deploy']['files'][themeDir + '/vendor.js'] = themeDir + '/vendor.js';
	gruntConfig['uglify']['deploy']['files'][themeDir + '/app.js'] = themeDir + '/app.js';

	grunt.initConfig(gruntConfig);

	grunt.registerTask('default', [ 'build', 'watch' ]);

	grunt.registerTask('build', [ 'svg_sprite:build', 'less:build', 'concat:build', 'concat:app' ]);
	grunt.registerTask('deploy', [ 'svg_sprite:build', 'less:deploy', 'concat:deploy', 'concat:app', 'uglify:deploy' ]);
};
