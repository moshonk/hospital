<?php 

[basic_settings]

    cache_expiration    = 0             ; Cache expiration time in minutes
                                        ; Set to -1 for permanent caching

    enable_pagination   = false         ; Set to 'true' to enable pagination

    paginator_threshold = 10            ; Maximum number of pages to display
                                        ; in the paginator before truncating

    thumbnail_width     = 250           ; Thumbnail width (in pixels)

    thumbnail_height    = 250           ; Thumbnail height (in pixels)

    thumbnail_quality   = 85            ; Thumbnail quality from 1 - 100
                                        ; Higher = better quality / slower

    theme_name          = uber-blue   ; Theme used to style the gallery


[advanced_settings]

    images_per_page     = 24            ; Images displayed per page, requires
                                        ; enable_pagination be set to 'true'

    images_sort_by      = natcasesort   ; Method used to sort image array
                                        ; Available sorting options include:
                                        ; asort, arsort, ksort, krsort,
                                        ; natcasesort, natsort, shuffle

    reverse_sort        = false         ; Set to 'true' to reverse sort order

    enable_debugging    = false         ; Output debug messages

?>