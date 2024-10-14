pipeline {
    agent any
    stages {
        stage('Build Image') {
            steps {
                sh 'docker image build -t englishlearning:$(git rev-parse --short HEAD) .'
            }
        }
        stage('Tag Image'){
            steps {
                sh 'docker tag englishlearning:$(git rev-parse --short HEAD)  andrepaulino/englishlearning:$(git rev-parse --short HEAD)'
            }
        }
        stage('Subindo imagem para o repositório DockerHub'){
            steps{
                sh 'docker push andrepaulino/englishlearning:$(git rev-parse --short HEAD)'
            }
        }
    }
}