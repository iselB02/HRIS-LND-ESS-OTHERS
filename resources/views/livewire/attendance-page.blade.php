<div class="attendance_container">
    <div class="attendance_filter">
      <div class="date-container">
      <span class="date-label">Date</span>
      <input type="date" class="date-input" id="startDate" name="startDate">
      <span> - </span>
      <input type="date" class="date-input1" id="endDate" name="endDate">
      </div>
    </div>    
    <div class="attendance_sheet">
        <style>
            body {
            font-family: Arial, sans-serif;
        }
        </style>
    <table>
      <thead>
      <tr>
            <th>Date</th>
            <th>Time-In</th>
            <th>Time-Out</th>
            <th>Total Hours Work</th>
            <th>Overtime</th>
            <th>Remarks</th>
          </tr>
        </thead>
        <tbody>
          <!-- Hardcoded attendance data rows with overtime calculation -->
          <tr>
            <td>2023-12-01</td>
            <td>09:00 AM</td>
            <td>05:00 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2023-12-02</td>
            <td>09:15 AM</td>
            <td>05:30 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2023-12-03</td>
            <td>08:45 AM</td>
            <td>05:15 PM</td>
            <td>8 hours</td>
            <td>1.5 hours</td> <!-- Example overtime hours -->
            <td>Late</td>
          </tr>
          <tr>
            <td>2023-12-04</td>
            <td>09:30 AM</td>
            <td>05:45 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2023-12-05</td>
            <td>09:05 AM</td>
            <td>05:10 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2023-12-06</td>
            <td>10:00 AM</td>
            <td>06:00 PM</td>
            <td>8 hours</td>
            <td>2 hours</td> <!-- Example overtime hours -->
            <td>Late</td>
          </tr>
          <tr>
            <td>2023-12-07</td>
            <td>09:20 AM</td>
            <td>05:25 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2023-12-08</td>
            <td>09:10 AM</td>
            <td>05:20 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Absent</td>
          </tr>
          <tr>
            <td>2023-12-09</td>
            <td>09:25 AM</td>
            <td>05:35 PM</td>
            <td>8 hours</td>
            <td>0 hours</td>
            <td>Late</td>
          </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
               
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/attendancepage.css') }}">
@endpush