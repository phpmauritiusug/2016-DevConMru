# PHP - A JumpStart Session

_This session is the first of a series of 3, which will learn you how to build your PHP website from scratch, to a world class Laravel application, while deeply understanding what's going on backstage, giving you complete control over every little detail._

Going through the strength and weakness of PHP key features, studying the lifecycle of a PHP request, before bootstrapping a personal website using PHP from scratch.

## Summary

- Going through the strength and weakness of PHP, what is PHP good at
- Differences between PHP versions
- The lifecycle of a PHP request
- DOs and DON'Ts when coding
- Bootstrapping a personal website using PHP from scratch _(this would then serve as a refactoring during next 2 sessions)_

## Setting up your environment

You have to download and install [VirtualBox](https://www.virtualbox.org/) and [Vagrant](https://www.vagrantup.com/), then it's as easy as:

```
cd /your/folder

# Clone this repository
git clone https://github.com/phpmauritiusug/2016-DevConMru.git

# Run the appropriate script
./2016-DevConMru/PHP-01-1-JumpStart/run.sh
```

A Vagrant box is downloading and installing automatically. Good news: it's a virtual machine, completely separated from your computer, installing nothing obscure in every little folder of your computer as all lies in, following the example, `/your/folder/2016-DevConMru/PHP-01-1-JumpStart/vagrant-env`. When connected through SSH inside of this virtual machine (at the end of the `run.sh` script), just launch that initial script:

```
bash /var/www/doRunInVagrantSSH.sh
```

### Uninstalling the environment

Following the example, just get back to the appropriate and destroy the Vagrant virtual machine you created:

```
cd /your/folder/2016-DevConMru/PHP-01-1-JumpStart/vagrant-env

# This completely destroy the virtual machine from virtual box and your filesystem
vagrant destroy
```