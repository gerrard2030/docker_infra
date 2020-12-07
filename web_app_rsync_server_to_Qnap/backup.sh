#!/bin/bash
rsync -avz --delete /root/newpan/ --log-file='/root/rsync/backup.log' --log-file-format='%t %f %b' --include='*.xml' admin@192.168.0.4:/share/Nextcloud_backup/
