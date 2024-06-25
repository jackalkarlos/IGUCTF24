#!/bin/sh
# Add your startup script

# DO NOT DELETE
socat -dd TCP4-LISTEN:9999,fork,reuseaddr EXEC:/home/ctf/helloworld,pty,echo=0,raw,iexten=0