<h2>barangay users Index</h2>
<table>
    <tr>
        <th>Id</th>
        <th>username</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Date Created</th>
    </tr>
     <?php foreach ($brgyusers as $brgyuser): ?>
    <tr>
        <td><?php echo $brgyuser['Brgyuser']['id']; ?> &nbsp;
		</td>
		<td><?php echo $brgyuser['Brgyuser']['username']; ?></td>
        <td><?php echo $brgyuser['Brgyuser']['fname']; ?></td>
        <td>
        <?php echo $brgyuser['Brgyuser']['mname']; ?>
        </td>
        <td><?php echo $brgyuser['Brgyuser']['lname']; ?></td>
        <td><?php echo $brgyuser['Brgyuser']['dtcreated']; ?></td>

    </tr>
    <?php endforeach; ?>
</table>