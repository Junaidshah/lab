#!/bin/bash
set -e
#Installing the necessary software.
if ! type "brew" > /dev/null; then
  ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)";
fi
brew cask reinstall vagrant
vagrant plugin expunge --reinstall
brew cask reinstall --force virtualbox

#Bring up the virtual machine with wordpress and nagios server installed.
vagrant up
