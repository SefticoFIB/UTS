pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'docker stop redlock-web || true'
                sh 'docker rm redlock-web || true'
                sh 'docker build . -t redlock-web'
                sh 'docker run -d --name redlock-web -p 7077:80 --network redlock redlock-web'
            }
        }
    }
}
