pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'docker stop web-redlock2 || true'
                sh 'docker rm web-redlock2 || true'
                sh 'docker build . -t redlock-web'
                sh 'docker run -d --name redlock-web -p 7077:80 --network redlock-net redlock-web'
            }
        }
    }
}