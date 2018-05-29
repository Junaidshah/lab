VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network :private_network, ip: "10.10.10.10"
  config.vm.define "testvm01" do |h1|
  h1.vm.hostname = "testvm01"
  config.vm.provision "ansible_local" do |ansible|
    ansible.install = "true"
    ansible.install_mode = "pip"
    ansible.verbose = "v"
    ansible.playbook = "base.yml"
    ansible.limit = "all"
  config.vm.synced_folder ".", "/vagrant", owner:"www-data", group:"www-data", mount_options:["dmode=775", "fmode=775"]
  end
  end
end
