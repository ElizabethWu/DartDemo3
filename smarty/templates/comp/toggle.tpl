<table border=1>
<!-- Standards -->
	{$start = 0}{$end = $width-1}
	{while $start < $totalStd}
		{$max = $totalStd - $start} 
		<tr rowspan=2 bgcolor={$color1}>
			<th rowspan=2>{$sub} ({$lvl}){if $levelName neq ""}<br />{$levelName}{/if}</th>
		{for $i=$start to $end max=$max}
			{$std = $standards.{$i}}
			<th width={$cellwidth} onMouseOver="return escape('{$std.description}')">
				<a href={$std.link}>{$std.std}</a>
			</th>
		{/for}
		</tr>
		<tr>
		{if $Display eq 'edit'}
			{for $i=$start to $end max=$max}
				{$stdID = $standards.{$i}.std}
				{$std = $student.standards.{$stdID}}
				<td>
					<input type=hidden name="old_{$std.name}" value="{$std.value}" />
					<input type=hidden name="ch_{$std.name}" value=empty />
					{html_options name="{$std.name}" options=$gradeSymbols selected=$std.selected onChange="changeValue('{$std.name}',this.value)"}
				</td>
			{/for}
		{else}
			{for $i=$start to $end max=$max}
				{$stdID = $standards.{$i}.{std}}
				{$std = $student.standards.{$stdID}}
				<td align=center>&nbsp;{$std.symbol}&nbsp;</td>
			{/for}
		{/if}
		</tr>
		{$start = $end+1}{$end = $end+$width}{if $end > $totalStd}{$end = $totalStd-1}{/if}
	{/while}
	</table>
	<table border= 1>

	<!-- Overall -->
	{$start = 0}{$end = $width-1}
	{while $start < $totalOver+$n_sum}
		{$max = $totalOver - $start} 
		<tr rowspan=2 bgcolor={$color1}>
			<th rowspan=2>{$sub} ({$lvl}){if $levelName neq ""}<br />{$levelName}{/if}</th>
		{for $i=$start to $end max=$max}
			{$over = $overall.{$i}}
			<th width={$cellwidth} onMouseOver="return escape('{$over.description}')">{$over.std}</th>
		{/for}
		{if $end >= $totalOver - 1} {* Last row *}
			<!-- Summary -->
			{foreach $summary as $sumID => $sum}
				<th width={$cellwidth} onMouseOver="return escape('{$sum.description}')">{$sum.label}</th>
			{/foreach}
		{/if}
		</tr>
		<tr>
		{if $Display eq 'edit'}
			<!-- Overall -->
			{for $i=$start to $end max=$max}
				{$overID = $overall.{$i}.std}
				{$over = $student.overall.{$overID}}
				<td>
					<input type=hidden name="old_{$over.name}" value="{$over.value}" />
					<input type=hidden id="ch_{$over.name}" name="ch_{$over.name}" value=empty />
					{html_options name="{$over.name}" options=$gradeSymbols selected=$over.selected onChange="changeValue('{$over.name}',this.value)"}
				</td>
			{/for}

			{if $end >= $totalOver - 1} {* Last row *}
				<!-- Summary -->
				{foreach $summary as $sumID => $sum}
					{$student_sum = $student.summary.{$sumID}}
					<td>
						<input type=hidden name=old_{$student_sum.name} value={$student_sum.value} />
						<input type=hidden id=ch_{$student_sum.name} name=ch_{$student_sum.name} value=empty />
						{html_options name="{$student_sum.name}" options=$sum.options selected=$student_sum.value onChange="changeValue('{$student_sum.name}', this.value)"}
					</td>
				{/foreach}
			{/if}
		{else}{* View Mode *}
			<!-- Overall -->
			{for $i=$start to $end  max=$max}
				{$overID = $overall.{$i}.std}
				{$over = $student.overall.{$overID}}
				<td align=center>&nbsp;{$over.symbol}&nbsp;</td>
			{/for}
			{if $end >= $totalOver - 1} {* Last row *}
				<!-- Summary -->
				<td align=center>&nbsp;{$student.summary.qpi.value}&nbsp;</td>
				<td align=center>&nbsp;{$student.summary.ase.value}&nbsp;</td>
				<td align=center>&nbsp;{$student.summary.prog.value}&nbsp;</td>
			{/if}
		{/if}
		{$start = $end+1}{$end = $end+$width}
		{if $end >= $totalOver - 1} {* Last row *}
			{$end = $totalOver+$n_sum}
		{/if}
		</tr>
	{/while}
</table>
<input type=hidden name="old_{$student.comment.comment_id}" value="{$student.comment.esc_comment}" />
<input type=hidden id="ch_{$student.comment.comment_id}" name="ch_{$student.comment.comment_id}" value=empty />
<font size="2"><b>Teacher Comments:</b></font><br/>
{if $Display eq 'edit'}
<textarea name="comment_{$studentID}" rows="8" cols="80" wrap="physical" onChange='changeValue("{$student.comment.comment_id}",this.value )'>{$student.comment.value}</textarea><br/>
{else}
{$student.comment.value}&nbsp;<br/><br/>
{/if}
