pipeline {
    agent any
    stages {
        stage('Build Image') {
            steps {
                sh 'docker image build -t englishlearning:$(git rev-parse --short HEAD | sha256sum | awk '{print $1}') .'
            }
        }
        stage('Tag Image'){
            steps {
                sh 'docker tag englishlearning:$(git rev-parse --short HEAD | sha256sum | awk '{print $1}')  andrepaulino/englishlearning:$(git rev-parse --short HEAD | sha256sum | awk '{print $1}')'
            }
        }
        stage('Subindo imagem para o repositório DockerHub'){
            steps{
                sh 'docker push andrepaulino/englishlearning:$(git rev-parse --short HEAD | sha256sum | awk '{print $1}')'
            }
        }
    }
}