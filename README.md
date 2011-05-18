


# Amazon SES for Symfony.

This class is designed to integrate Swift_AWSTransport into Symfony ecosystem.


## setup

1. Download sfAWSTransport class
2. Download [swift-aws]


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


  [swift-aws]: https://github.com/jmhobbs/Swiftmailer-Transport--AWS-SES "Swiftmailer-Transport--AWS-SES"
