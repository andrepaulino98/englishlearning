pipeline {
    agent any
    stages {
        stage('Build Image') {
            steps {
                sh 'docker image build -t englishlearning:latest .'
            }
        }
        stage('Tag Image'){
            steps {
                sh 'docker tag englishlearning:latest andrepaulino/englishlearning:latest'
            }
        }
        stage('Subindo imagem para o repositório DockerHub'){
            steps{
                sh 'docker push andrepaulino/englishlearning:latest'
            }
        }
    }
}