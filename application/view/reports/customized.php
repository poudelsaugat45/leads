<div class="mini-container">
  <h2>Customised Report</h2>
  <form action="<?php echo URL; ?>reports/customizedreport" method="POST">
    <table>
      <tbody id='counsellors'>
        <tr>

          <td>Counsellor Name : <input type="text" name="c_name" required /></td>
          <td>Semester : <input type="text" name="semester" required /></td>
        </tr>
  </table>
  <input type="submit" name="done" value="Select" />

  </form>
  </select>

  <table>
    <thead>
      <td>Counsellor Name</td>
      <td>Lead ID</td>
      <td>Lead Name</td>
      <td>Date
      <td>No of followups</td>
    </thead>
    <tbody>
      <?php foreach ($leads as $lead) { ?>
          <tr>
              <td><?php if (isset($lead->c_name)) echo htmlspecialchars($lead->c_name, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($lead->l_id)) echo htmlspecialchars($lead->l_id, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($lead->l_name)) echo htmlspecialchars($lead->l_name, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($lead->date)) echo htmlspecialchars($lead->date, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($lead->no_of_followup)) echo htmlspecialchars($lead->no_of_followup, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table><br>
  <a href="<?php echo URL; ?>reports/index"><button type="button">Back</button></a>
</div>

</div> <!-- container ends -->
