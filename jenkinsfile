pipeline {
    agent any
    stages {
        stage('Lista de Pods') {
            steps {
                sh 'kubectl get pods -A'
            }
        }
    }
}