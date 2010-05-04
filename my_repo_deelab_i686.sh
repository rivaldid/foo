#!/bin/bash
sudo mount /mnt/deelab.org
sudo rsync -azvv --delete /mnt/deelab.org/arch/i686/ /home/dax/repo_deelab_i686
sudo chown dax /home/dax/repo_deelab_i686/*
sudo umount /mnt/deelab.org
