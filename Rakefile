# Boxee app build
# DRY...
# http://github.com/jamiew/boxee-apps

task :default => :build
 
desc 'Build apps from index.xml file'
task :build do
  puts 'Building...'
  # TODO
end
 
desc 'Build and deploy'
task :deploy => :build do
  sh 'rsync -rtzh --progress --delete _site/ jamiew@txd:~/domains/irenepolnyi.com/web/public'
end

# TODO
desc 'Run test/spec suite'
task :spec do
  puts 'TODO'
end
