<div class="mini-container">
  <h2>Counsellor report</h2>
  <form action="<?php echo URL; ?>reports/counsellorreport" method="POST">
    <table>
      <tbody id='counsellors'>
        <tr>

          <td>Counsellor name : <input type="text" name="c_name" required /></td>
        </tr>
  </table>
  <input type="submit" name="done" value="Select" />
  </form>
  </select>

  <table>
    <thead>
      <td>Lead Name</td>
      <td>Lead ID</td>
    </thead>
    <tbody>
      <?php foreach ($leads as $lead) { ?>
          <tr>
              <td><?php if (isset($lead->l_name)) echo htmlspecialchars($lead->l_name, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($lead->l_id)) echo htmlspecialchars($lead->l_id, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table><br>
  <a href="<?php echo URL; ?>reports/index"><button type="button">Back</button></a>
</div>

</div> <!-- container ends -->
