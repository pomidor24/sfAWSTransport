

# Amazon SES for Symfony.

This class is designed to integrate Swift_AWSTransport into Symfony ecosystem.


## setup

1. Download sfAWSTransport class
2. Download ["Swiftmailer-Transport--AWS-SES"][swift-aws] dependency
3. Locate files in any directory Symfony can load classes from
4. Configure your factories.yml

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

5. Clean cache `php symfony cc` if necessary

Enjoy Amazon Simple Email Service :-)

  [swift-aws]: https://github.com/jmhobbs/Swiftmailer-Transport--AWS-SES "Swiftmailer-Transport--AWS-SES"
