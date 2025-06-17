# Content model

## Homepage

- Section: Single
- Fields:
    - SEO Description
        - Plain text (max character 160)
    - SEO Image
        - Asset (limit 1) folder seo


## Pages

- Section: Structure
- Fields:
    - SEO Description
        - Plain text
    - SEO Image
        - Asset (limit 1)
    - Content builder
        - Matrix field
            - Call to action
                - Cta
                    - Entry
            - Text editor
                - Section title
                    - Plain text
                - Title
                    - Default
                - Editor
                    - Ckeditor full
                - Transformer en accordéon
                    - Lightswitch
                - Enlever la marge sous le bloc
                    - Lightswitch
            - Image + Text
                - Titre
                    - Default
                - Editor
                    - Ckeditor light
                - Bouton
                    - Link
                - Image
                    - Asset (1)
                - Positionnement de l'image
                    - Lightswitch
            - Galery
                - Type de galerie
                    - Radio (Mosaic or Carousel)
                - Titre
                    - Default
                - Images
                    - Assets (1+) folder /content
            - Documents and links
                - Titre
                    - Default
                - Documents
                    - Assets (1+) folder /content
                - Liens
                    - Table
            - Video
                - Titre
                    - Default
                - Source
                    - Radio (Vimeo or YouTube)
                - ID
                    - Plain text

## Call to action

- Section: Structure
- Fields:
    - Title
        - Default
    - Text
        - Ckeditor Extra Light
    - Button
        - Link
            - URL
            - Email
            - Phone
            - Entry
            - Asset