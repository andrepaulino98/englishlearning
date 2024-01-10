pipeline {
    agent any
    stages {
        stage('Build Image') {
            steps {
                sh 'docker image build -t englishlearning:latest -f .'
            }
        }
        stage('Tag Image'){
            steps {
                sh 'docker tag englishlearning:latest andrepaulino/englishlearning:latest'
            }
        }
    }
}