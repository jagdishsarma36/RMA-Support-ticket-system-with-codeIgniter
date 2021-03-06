<?php defined('BASEPATH') Or exit('No direct script access allowed'); ?>

<div class="fakeHeader">
    <!-- insert later -->
</div>
<div class="rma-content rmaDefaultContent">
    <div class="rma-summary-content">
        <div class="rma-summary-content-p">
            <article id="rma-rma-summary-post">
                <header class="rma-page-title-container">
                    <h1 class="rma-page-title">Current RMA/Claim Summary</h1>
                </header>
                <div class="rma-summary-content-container">
                    <form>
                        <?php foreach ($results as $val) { ?>
                        <table width="100%" class="rma-summary-head rma-summary-table" cellspacing="3" border="1">
                            <thead>
                                <tr>
                                    <th colspan="7" class="rma-summerry">Current RMA/Claim Summary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7" style="padding: 10px 5px; font-weight: bold;">Total: <?php echo $val['rma_request_count']; ?></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="th-background"></th>
                                    <th class="th-background">Reference #</th>
                                    <th class="th-background">RMA #</th>
                                    <th class="th-background">Refund #</th>
                                    <th class="th-background">Reason</th>
                                    <th class="th-background">RMA Creation Date</th>
                                    <th class="th-background">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $val['rma_request_count']; ?></td>
                                    <td><?php echo $val['reference_number']; ?></td>
                                    <td>
                                        <a style="color: #1A1BCF;" href="#">
                                            <?php
                                            if (empty($val['rma_number'])) {
                                                echo "-";
                                            } else {
                                                echo $val['rma_number'];
                                            }
                                            ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php
                                        if (empty($val['refund_number'])) {
                                            echo "-";
                                        } else {
                                            echo $val['refund_number'];
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $val['return_type']; ?></td>
                                    <td><?php echo $val['rma_request_date']; ?></td>
                                    <td><?php echo $val['status']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php } ?>
                    </form>
                    <div class="push-30-t">
                        <a style="color: #1A1BCF; text-decoration: underline; font-weight: bold; display: block;" href="<?php echo base_url();?>check_status">Return to RMA Search</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
       $("body").addClass("rma-body");
    });
</script>
