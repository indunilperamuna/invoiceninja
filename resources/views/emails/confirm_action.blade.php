<script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"EmailMessage",
        "description":"Confirm your Evoice account",
        "action":
        {
            "@type":"ConfirmAction",
            "name":"Confirm account",
            "handler": {
                "@type": "HttpActionHandler",
                "url": "{{{ URL::to("user/confirm/{$user->confirmation_code}") }}}"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Evoice",
                "url": "{{{ NINJA_WEB_URL }}}"
            }
        }
    }
</script>