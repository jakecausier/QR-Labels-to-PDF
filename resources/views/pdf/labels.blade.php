
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EI - Label Maker</title>

        @component('partials.print-style')
        @endcomponent

    </head>

    @php
      $num_rows = 7;
      $row_chunks = array_chunk($rows, $num_rows);
    @endphp

    <div class="ui-box top noprint">
        <span>Change the values in the URL to generate labels</span>
    </div>

    <div class="ui-box bottom noprint">
        @if ($request->pages)
          <span>{{ count($row_chunks) * 42 }} labels across {{ count($row_chunks) }} pages</span>
        @else
          <span>{{ $request->length }} labels across {{ count($row_chunks) }} pages</span>
        @endif

        <a href="{{ route('labels.generate', ['start' => $request->start, 'length' => $request->length, 'pages' => $request->pages]) }}">Generate PDF</a>
    </div>

    <body class="A4 landscape">
        @foreach ($row_chunks as $key => $page)
          <section class="sheet">

              <table class="labels">
                  <tbody>
                      @foreach ($page as $row_key => $row)
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

              <div class="page-info">
                @if ($request->pages)
                  Page {{ $key + 1 }} of {{ count($row_chunks) }}  --  Labels {{ $request->start + 42 * $key }} to {{ (42 * ($key + 1)) }}
                @else
                  Page {{ $key + 1 }} of {{ count($row_chunks) }}  --  Labels {{ $request->start + 42 * $key }} to {{ min(($request->start - 1) + (42 * ($key + 1)), ($request->length + ($request->start - 1))) }}
                @endif
              </div>

          </section>

        @endforeach

    </body>
</html>
