#!/bin/bash
while true; do
    RAM=$(free -m | awk 'NR==2{printf "%.2f%%\t\t", $3*100/$2 }')
    curl -X POST -H 'Content-type: application/json' --data '{"text":"RAM usage: '"$RAM"'"}' https://hooks.slack.com/services/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
    sleep 600
done
