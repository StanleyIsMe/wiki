Vagrant
====
Vagrant是一款用於構建及配置虛擬開發環境的軟體，基於Ruby,主要以命令行的方式運行。
主要使用Oracle的開源VirtualBox虛擬化系統，與Chef，Salt，Puppet等環境配置管理軟體搭配使用， 可以實行快速虛擬開發環境的構建。
早期以VirtualBox為對象，1.1以後的版本中開始對應VMware等虛擬化軟體，包括Amazon EC2之類伺服器環境的對應。


# WHY

vagrant 僅使用一行指令就可以建立，啟動，停止，摧毀vm，完全補足VirtualBox所欠缺的人性化指令列介面

# How to install
[vagrant官方](https://www.vagrantup.com/)

# Own Environment

* VirtualBox:5.0.38
* Vagrant:1.8.5
* OS: OSX(10.10.5)

# Command

```
vagrant init ubuntu/trusty64       	初始產生Vagrantfile，預設作業系統box = ubuntu/trusty64 
vagrant up                         	依Vagrantfile內容，啟動or建立vm
vagrant halt                       	vm關機
vagrant reload					   	        vm重開
vagrant ssh                        	ssh進入vm
vagrant destroy --force            	強制刪除vm

vagrant box add ubuntu/trusty64     下載ubuntu/trusty64 box
vagrant box remove ubuntu/trusty64  刪除box
vagrant box list					已下載哪些作業系統
vagrant reload --provision          當vagrant已建立，下此指令執行vagrantfileweb_config.vm.provision
vagrant provision					用指定的配置腳本配置一個vm
vagrant box outdated			    顯示box當下版本，以及追蹤線上最新版本
vagrant box update					更新box版本
vagrant pakage						一個已經Build好的環境打包成一個我們自己的Box
vagrant help						顯示vagrant有哪些指令可以使用


```


# Vagrantfile
```Ruby
#目前版本只有"1" or "2"
#if vagrant-version 1.0.x then "1"  else "2"
VAGRNTFILE_API_VERSION = "2"  

Vagrant.configure(VAGRNTFILE_API_VERSION) do |config|
  config.vm.define :app do |web_config|
    web_config.vm.box = "ubuntu/trusty64"
    web_config.vm.host_name = "web"

    #本地與vm同步資料夾
    web_config.vm.synced_folder ".", "/vagrant", type: "nfs"
    web_config.vm.synced_folder "Stanley_project", "/home/vagrant/Stanley_project", type: "nfs"

    #host-8080 port轉發vm-80 port
    web_config.vm.network "forwarded_port", guest: 80, host: 8080
    #本地端用browser以ip:10.10.10.10來存取vm
    web_config.vm.network "private_network", ip: "10.10.10.10"
    #公共網路允許ip透過DHCP指派
    web_config.vm.network "public_network"

    #vm初始建立時，執行外部腳本scripts/install.sh
    web_config.vm.provision "shell", path: "scripts/install.sh"

    #vm建立時，執行內部腳本
    web_config.vm.provision :shell, :inline => "echo Hello, World"

    web_config.vm.provider "virtualbox" do |v|
      #set vm 記憶體用量
      v.memory = 4096 
    end
  end


  #multi vm,connect with each other
  config.vm.define:app do |app_config| 
      app_config.vm.customize  [ "modifyvm" ,  :id ,  "--name" ,  "app" ,  "--memory" ,  "512" ] 
      app_config.vm.box  =  "ubuntu-12-10" 
      app_config.vm.host_name  =  "app" 
      app_config.vm.network  :hostonly ,  "33.33.13.10" 
  end 
  config.vm.define:db do |db_config| 
    db_config.vm.customize  [ "modifyvm" ,  :id ,  "--name" ,  "db" ,  "--memory" ,  "512" ] 
    db_config.vm.box  =  "ubuntu-12-10" 
    db_config.vm.host_name  =  "db" 
    db_config.vm.network  :hostonly ,  "33.33.13.11" 
  end

end

```

# Ref
* [Vagrantfile配置技巧](http://www.imike.me/2016/03/15/Vagrantfile%E9%85%8D%E7%BD%AE%E6%8A%80%E5%B7%A7/)
* [vagrant官方](https://www.vagrantup.com/)
* [vagrant wiki](https://zh.wikipedia.org/wiki/Vagrant)



