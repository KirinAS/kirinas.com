DOCKER := docker
IMAGE = $(file < TAG)
VERSION = $(file < VERSION)
TAG = $(IMAGE):$(VERSION)
DASH_TAG = $(IMAGE)-$(VERSION)

all: build

full-test: build test

test:
	$(DOCKER) run -it --entrypoint /bin/bash $(TAG)

build:
	$(DOCKER) build --tag $(TAG) .

ECR := 843020956985.dkr.ecr.us-west-2.amazonaws.com
upload-aws:
	$(DOCKER) tag $(TAG) $(ECR)/$(TAG)
	aws --profile waf ecr get-login-password --region us-west-2 | $(DOCKER) login --username AWS --password-stdin $(ECR)
	$(DOCKER) push $(ECR)/$(TAG)

HUB := faww/kirinas
upload-dockerhub:
	$(DOCKER) tag $(TAG) $(HUB):$(VERSION)
	$(DOCKER) push $(HUB):$(VERSION)
