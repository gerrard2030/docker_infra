#!/bin/bash
rsync -avz --delete /root/pan/ --log-file='/root/docker_infra/web_app_nextcloud/backup.log' --log-file-format='%t %f %b' --include='*.xml' admin@192.168.0.4:/share/Docker/web_app_nextcloud/
