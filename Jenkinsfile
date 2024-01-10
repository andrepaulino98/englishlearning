pipeline {
    agent any
    stages {
        stage('Lista Pods') {
            steps {
                sh 'kubectl get pods -A'
            }
        }
    }
}
