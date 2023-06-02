- name: ssh scp ssh pipelines
  uses: cross-the-world/ssh-scp-ssh-pipelines@latest
  env:
    WELCOME: "ssh scp ssh pipelines"
    LASTSSH: "Doing something after copying"
  with:
    host: ${{ secrets.DC_HOST }}
    user: ${{ secrets.DC_USER }}
    pass: ${{ secrets.DC_PASS }}
    port: ${{ secrets.DC_PORT }}
    connect_timeout: 10s
    first_ssh: |
      git pull /var/www/golaundrykasir
