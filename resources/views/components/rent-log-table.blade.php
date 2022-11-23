<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->  
    <table class="table table-bordered table-sm table-resposive">
                    <thead>
                        <tr>
                          <th style="width: 7%">No</th>
                          <th style="width: 15%">User</th>
                          <th style="width: 19%">Book</th>
                          <th style="width: 15%">Rent Date</th>
                          <th style="width: 17%">Return Date</th>
                          <th style="width: 15%">Actual Return Date</th>
                        </tr>
                      </thead>
                 
                  
                      <tbody>
                      @foreach ($rentlog as $rent_log)
                        <tr class=" {{$rent_log->actual_return_date == null ? '' :
                                     ($rent_log->return_date < $rent_log->actual_return_date ? 'bg-danger' : 'bg-success' )}} ">
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $rent_log->user->username}} </td>
                          <td> {{ $rent_log->book->title}} </td>
                          <td> {{ $rent_log->rent_date}} </td>
                          <td> {{ $rent_log->return_date}} </td>
                          <td> {{ $rent_log->actual_return_date}} </td>
                        </tr>
                        @endforeach
                      </tbody>  
                    </table>

</div>