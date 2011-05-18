# Amazon SES for Symfony.

This class is designed to integrate Swift_AWSTransport to Symfony ecosystem.

## factories.yml example

      mailer:
        class: sfMailer
        param:
          logging: %SF_LOGGING_ENABLED%
          charset: %SF_CHARSET%
          delivery_strategy: realtime
          transport:
            class: sfAWSTransport
            param:
              accessKeyId: 12345
              secretKey: 6789
              debug: false
              endpoint: https://email.us-east-1.amazonaws.com/


