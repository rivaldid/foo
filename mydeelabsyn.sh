#!/bin/bash
sudo mount /mnt/deelab.org
#sudo dirsync -V -v 9 -r -l /dati/Photos/backup/log.log -m 0 /mnt/deelab.org/gallery/hdd_200709/albums/private/ /dati/Photos/backup/
sudo rsync -azvv --delete --exclude-from=/home/dax/mydeelabsyn_exclude /mnt/deelab.org/ /dati/deelab_current/
sudo umount /mnt/deelab.org
