#!/usr/bin/env bash

DIRECTORY=vagrant-env

if [ ! -d "$DIRECTORY" ]; then
  git clone https://github.com/scotch-io/scotch-box.git "$DIRECTORY"
fi
cd "$DIRECTORY"
cp ../doRunInVagrantSSH.sh ./doRunInVagrantSSH.sh

vagrant up # May take a while the first time !
vagrant ssh