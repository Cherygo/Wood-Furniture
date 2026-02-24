FROM ubuntu:latest
LABEL authors="olexd"

ENTRYPOINT ["top", "-b"]
