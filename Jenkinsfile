pipeline {
    agent any
    stages {
        stage('Build Image') {
            steps {
                sh 'docker build -t englishlearning -f .'
            }
        }
        stage('Tag Image'){
            steps {
                sh 'docker tag englishlearning andrepaulino/englishlearning:latest'
            }
        }
    }
}