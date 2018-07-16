
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EI - Label Maker</title>

        @component('partials.print-style')
        @endcomponent


    </head>

    <body class="A4 landscape">
    <section class="sheet">
        <table class="labels">
            <tbody>
                @foreach ($rows as $row_key => $row)
                    <tr class="row-{{ $row_key + 1}}">
                        @foreach ($row as $label_key => $label)
                            <td class="label-single">
                                <div class="label-qr">
                                    <img src="{{ url( DNS2D::getBarcodePNGPath( $label['qr_id'], "QRCODE", 4, 4) ) }}">
                                </div>

                                <div class="label-logo-b2">
                                    <img src="{{ url('img/logos/b2.png') }}"/>
                                </div>

                                <div class="label-logo-ei">
                                    <img src="{{ url('img/logos/ei.png') }}"/>
                                </div>

                                <div class="label-text-id">
                                    <span><strong>Item ID:</strong> {{ substr($label['qr_id'], 3) }}</span>
                                </div>

                                <div class="cutoff">
                                    <span><strong>Item ID:</strong> {{ substr($label['qr_id'], 3) }}</span>
                                </div>

                                <div class="label-logo-cutoff-b2">
                                    <img src="{{ url('img/logos/b2.png') }}"/>
                                </div>

                                <div class="label-logo-cutoff-ei">
                                    <img src="{{ url('img/logos/ei.png') }}"/>
                                </div>
                            </td>
                        @endforeach
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

        <div class="ui-box noprint">
            <a href="{{ route('labels.generate') }}">Generate PDF</a>
        </div>

    </body>
</html>
