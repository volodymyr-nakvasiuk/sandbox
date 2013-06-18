set :application, "set your application name here"
set :domain,      "#{application}.com"
set :app_path,    "app"

set :repository,  "#{domain}:/var/repos/#{application}.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

set :keep_releases, 3
set :use_sudo,      false

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

## Nice options to add
set :use_composer,            true
set :composer_options,        "--verbose --optimize-autoloader --prefer-source"
ssh_options[:forward_agent] = true

set :shared_files,            ["app/config/parameters.yml"]
# set :shared_children,         [app_path + "/logs", web_path + "/uploads", "data"]
# set :clear_controllers,       false
# set :assets_symlinks,         true
set :copy_vendors,            true

# # configure production settings
# task :production do
#     set :stage,     "production"
#     set :deploy_to, "/usr/local/web/htdocs/org.sonata-project"
#
#     role :app,      'wwww-data@sonata-project.org', :master => true, :primary => true
#     # role :app,      'wwww-data@sonata-project.org'
#
#     role :web,      'wwww-data@sonata-project.org', :master => true, :primary => true
#     # role :web,      'wwww-data@sonata-project.org'
#
#     role :db,       "wwww-data@db.sonata-project.org", :primary => true, :no_release => true
# end
#
# # configure validation settings
# task :validation do
#     set :stage,     "validation"
#     set :deploy_to, "/usr/local/web/htdocs/org.sonata-project.validation"
#
#     role :app,      'wwww-data@validation.sonata-project.org', :master => true, :primary => true
#     # role :app,      'wwww-data@sonata-project.org'
#
#     role :web,      'wwww-data@validation.sonata-project.org', :master => true, :primary => true
#     # role :web,      'wwww-data@sonata-project.org'
#
#     role :db,       "wwww-data@db.validation.sonata-project.org", :primary => true, :no_release => true
#
#     set :sonata_page_managers, ['page', 'snapshot']
# end

after "deploy:setup" do
    run "if [ ! -d #{deploy_to}/shared/app/config ]; then mkdir -p #{deploy_to}/shared/app/config; fi"

    upload(
        '%s/%s_parameters.yml' % [File.dirname(__FILE__), fetch(:stage)],
        '%s/shared/app/config/parameters.yml' % fetch(:deploy_to)
    )
end

after "deploy" do
    run "sudo chmod -R 777 #{latest_release}/app/cache"
    run "sudo chmod -R 777 #{latest_release}/app/logs"
end